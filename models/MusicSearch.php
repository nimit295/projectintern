<?php

namespace app\models;

use app\models\Music;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * MusicSearch represents the model behind the search form about `app\models\Music`.
 */
class MusicSearch extends Music {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['id', 'date'], 'integer'],
			[['name', 'authoor', 'producer'], 'safe'],
			[['price'], 'number'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query = Music::find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		$query->andFilterWhere([
			'id' => $this->id,
			'price' => $this->price,
			'date' => $this->date,
		]);

		$query->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'authoor', $this->authoor])
			->andFilterWhere(['like', 'producer', $this->producer]);

		return $dataProvider;
	}
}
