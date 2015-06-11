<?php

/**
 * This is the model class for table "tbl_partidos".
 *
 * The followings are the available columns in table 'tbl_partidos':
 * @property string $jugador1
 * @property string $jugador2
 * @property string $fecha_juego
 * @property string $resultado
 * @property integer $id_user
 */
class TblPartidos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_partidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jugador1, jugador2, fecha_juego, resultado, id_user', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('jugador1, jugador2, resultado', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jugador1, jugador2, fecha_juego, resultado, id_user', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jugador1' => 'Jugador1',
			'jugador2' => 'Jugador2',
			'fecha_juego' => 'Fecha Juego',
			'resultado' => 'Resultado',

		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('jugador1',$this->jugador1,true);
		$criteria->compare('jugador2',$this->jugador2,true);
		$criteria->compare('fecha_juego',$this->fecha_juego,true);
		$criteria->compare('resultado',$this->resultado,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblPartidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
