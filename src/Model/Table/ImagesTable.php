<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Images Model
 *
 * @property \App\Model\Table\CardsTable&\Cake\ORM\Association\HasMany $Cards
 *
 * @method \App\Model\Entity\Image newEmptyEntity()
 * @method \App\Model\Entity\Image newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ImagesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('images');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Cards', [
            'foreignKey' => 'image_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {

        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('img')//値の型を設定するために使います。scalerはテキスト型に設定します。
            ->maxLength('img', 30)//スカラ値が指定した文字数以下か
            ->allowEmpty('img')//空を許容する。3.7から非推奨
            ->requirePresence('img', 'create');
            //フィールドに存在することを要求する。nullは許容する
            // ->notEmptyString('img')//空を認めず、かつ文字列か
            // ->uploadedFile('img', ['maxSize' => '1000000','message' => 'サイズを1MBより小さくしてください。']);
            // ->add('img','fileExtension',[
            //     'rule' =>['extension',['png']],
            //     'message' => 'PNG 形式のファイルを選択してください',
            // ]);
            // ->add('img',[
            //     'uploadedFile' => [
            //         'rule' => ['uploadedFile', ['types' => ['image/png']]],
            //         'message' => 'jpegのみアップロード可能です。'
            //     ]
            // ]);




            // ->add('img', [
            //     'file' => [
            //     'rule' => ['uploadedFile', ['maxSize' => '1MB']],
            //     'last' => true,
            //     'message' => 'サイズを1MBより小さくして下さい。'
            //     ]
            // ]);
            // ->add('img', [
            //     'uploadedFile' =>[
            //         'rule' => ['uplpadedFile',['types' => ['image/jpeg'], 'maxSize' => '1MB']],
            //         'last' => true,
            //         'message' => 'JPEG file is required (max size is 1MB).'
            //     ],
            // ]);
            // ->add('img', 'fileSize', [
            //     'rule' => ['fileSize', '<', '1000000'],
            //     'message' => '1Mバイト未満のファイルを選択してください',
            // ])
            // ->add('img', 'extension', [
            //     'rule' => ['extension', ['jpg', 'png']],
            //     'message' => '拡張子が jpg か png のファイルを選択してください',
            //     'last' => true,
            // ]);
            // ->add('img', 'mimeType', [
            //     'rule' => ['mimeType', ['image/jpeg', 'image/png']],
            //     'message' => 'JPEG か PNG 形式のファイルを選択してください',
            // ]);


        $validator
            ->scalar('image_name')
            ->maxLength('image_name', 20)
            ->requirePresence('image_name', 'create')
            ->notEmptyFile('image_name')
            ->add('image_name',[
                'length' => [
                    'rule' => ['minLength', 2],
                    'message' => 'image_nameは2文字以上必要です。',
                ]
            ]);

        return $validator;
    }
}
