<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cards Controller
 *
 * @property \App\Model\Table\CardsTable $Cards
 * @method \App\Model\Entity\Card[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }/**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public $paginate = [
		'limit' => 20, // 1ページに表示するデータ件数
        'order' => [
            'cards.CardNumber' => 'asc'
        ]
	];
    public function index(){
        $this->loadModel('Versions');

        $versions = $this->Versions->find('list',[
            'keyField' => 'id',
            'valueField' => 'name'
        ]);

        $this->loadModel('Rarities');

        $rarities = $this->Rarities->find('list',[
            'keyField' => 'id',
            'valueField' => 'rarity_name'
        ]);

        //CardsTableの全体情報を呼び出し
        $cards = $this->Cards->find('all', ['contain' => ['Versions', 'Rarities']]);
        // $cards = $this->cards->find('all')->contain('Rarities');

        //post情報の有無をチェック
        if($this->request->getData()){
            //post情報のkeywordの有無をチェック
            if($this->request->getData('keyword')){
                $cards->where([
                        ['cardName'=>$this->request->getData('keyword')],
                ]);
            }
            //post情報のcolorの有無をチェック
            if($this->request->getData('color')){
                $cards->where([
                        ['color IN'=>$this->request->getData('color')],//IN句を使うと配列も取得できる
                ]);
            }
            //post情報のcostが数字として送られているかチェック
            if(is_numeric($this->request->getData('start_cost'))){
                $cards->where([
                    ['cost >='=>$this->request->getData('start_cost') ]
                ]);
            }
            if(is_numeric($this->request->getData('end_cost'))){
                $cards->where([
                    ['cost <='=>$this->request->getData('end_cost')]
                ])->order(['cost'=>'ASC']);
            }
        }

        $cards =$this->paginate($cards);
        //項目数が増えた場合にページ分割するようにpaginate処理
        //$cards = $this->paginate($cards);

        $array = [];
                $num = 0;//初期
                while ($num <= 15){
                    $array = $array + [$num => $num];
                    $num++;
                }
        $num--;

        $varsion_option = [
            '選択' => '選択',
            'NEW EVOLUTION' => 'NEW EVOLUTION',
         ];

        $rearty_option = [
            '選択' => '選択',
            'P-SEC' => 'P-SEC'
        ];

        $options = [
            '赤' => '赤',
            '青' => '青',
            '黄' => '黄',
            '緑' => '緑',
            '白' => '白',
            '黒' => '黒',
            '紫' => '紫'
        ];

        //上記で抽出した情報を$cardsという名称でセット
        $this->set(compact('cards','array','num','versions','options','varsion_option','rearty_option','rarities',$this->paginate()));

        if ($this->request->getData()) {
            $post_data = $this->request->getData();
            $this->set(compact('post_data'));
            }
    }
    /**
     * View method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Versions');

        $versions = $this->Versions->find('all',[
            'keyField' => 'id',
            'valueField' => 'short_name'
        ]);

        $this->loadModel('Rarities');

        $rarities = $this->Rarities->find('all',[
            'keyField' => 'id',
            'valueField' => 'rarity_name'
        ]);


        $card = $this->Cards->get($id, [
            'contain' => ['Versions', 'Rarities'],
        ]);
        // ['contain' => ['Versions', 'Rarities']]
        // $card = $this->Cards->find('all', ['contain'=>'rarities']);

        $this->set(compact('card','versions','rarities'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Versions');

        $versions = $this->Versions->find('list',[
            'keyField' => 'id',
            'valueField' => 'short_name'
        ]);
        $names = $this->Versions->find('list',[
            'keyField' => 'id',
            'valueField' => 'name'
        ]);

        $this->loadModel('Rarities');

        $rarities = $this->Rarities->find('list',[
            'keyField' => 'id',
            'valueField' => 'rarity_name'
        ]);

        $card = $this->Cards->newEmptyEntity();
        if ($this->request->is('post')) {
            $card = $this->Cards->patchEntity($card, $this->request->getData());
            if ($this->Cards->save($card)) {
                $this->Flash->success(__('The card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The card could not be saved. Please, try again.'));
        }
        $array = [];
                $num = 0;//初期
                while ($num <= 15){
                    $array = $array + [$num => $num];
                    $num++;
                }
        $num--;

        $options = [
            '赤' => '赤',
            '青' => '青',
            '黄' => '黄',
            '緑' => '緑',
            '白' => '白',
        ];

        $this->set(compact('card','array','versions','names','options','rarities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('Versions');

        $versions = $this->Versions->find('list',[
            'keyField' => 'id',
            'valueField' => 'short_name'
        ]);
        $names = $this->Versions->find('list',[
            'keyField' => 'id',
            'valueField' => 'name'
        ]);

        $this->loadModel('Rarities');

        $rarities = $this->Rarities->find('list',[
            'keyField' => 'id',
            'valueField' => 'rarity_name'
        ]);

        $card = $this->Cards->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $card = $this->Cards->patchEntity($card, $this->request->getData());
            if ($this->Cards->save($card)) {
                $this->Flash->success(__('The card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The card could not be saved. Please, try again.'));
        }

        $options = [
            '赤' => '赤',
            '青' => '青',
            '黄' => '黄',
            '緑' => '緑',
            '白' => '白',
        ];

        $this->set(compact('card','versions','names','options','rarities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $card = $this->Cards->get($id);
        if ($this->Cards->delete($card)) {
            $this->Flash->success(__('The card has been deleted.'));
        } else {
            $this->Flash->error(__('The card could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    //public $paginate = [
	//	'limit' => 300 // 1ページに表示するデータ件
	//];
}
