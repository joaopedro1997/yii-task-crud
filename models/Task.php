<?php

namespace app\models;

use Yii;
use yii\base\InvalidConfigException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\BaseActiveRecord;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $name
 * @property string $due_date
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Task extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['name', 'due_date'], 'required'],
            [['due_date'], 'safe'],
            [['created_at'], 'date'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'due_date' => 'Data de vencimento',
            'created_at' => 'Data de criação',
            'updated_at' => 'Data de atualização',
        ];
    }

    public function beforeSave($insert) {

        if (parent::beforeSave($insert)) {
            if ($this->due_date) {
                $formatter = Yii::$app->formatter;
                $this->due_date = $formatter->asDate($this->due_date, 'yyyy-MM-dd');
            }
            return true;
        }

        return false;
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    BaseActiveRecord::EVENT_BEFORE_INSERT => 'created_at',
                    BaseActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
                'value' => function() { return date('U');}
            ]
        ];
    }
}
