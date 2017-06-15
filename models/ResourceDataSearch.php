<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResourceData;

/**
 * ResourceDataSearch represents the model behind the search form about `app\models\ResourceData`.
 */
class ResourceDataSearch extends ResourceData
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rd_id'], 'integer'],
            [['rd_type', 'rd_commonName', 'rd_localName', 'rd_scienceName', 'rd_familyName', 'rd_nature', 'rd_area', 'rd_benefit', 'rd_picture', 'rd_other'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
    public function search($params)
    {
        $query = ResourceData::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'rd_id' => $this->rd_id,
        ]);

        $query->andFilterWhere(['like', 'rd_type', $this->rd_type])
            ->andFilterWhere(['like', 'rd_commonName', $this->rd_commonName])
            ->andFilterWhere(['like', 'rd_localName', $this->rd_localName])
            ->andFilterWhere(['like', 'rd_scienceName', $this->rd_scienceName])
            ->andFilterWhere(['like', 'rd_familyName', $this->rd_familyName])
            ->andFilterWhere(['like', 'rd_nature', $this->rd_nature])
            ->andFilterWhere(['like', 'rd_area', $this->rd_area])
            ->andFilterWhere(['like', 'rd_benefit', $this->rd_benefit])
            ->andFilterWhere(['like', 'rd_picture', $this->rd_picture])
            ->andFilterWhere(['like', 'rd_other', $this->rd_other]);

        return $dataProvider;
    }
}
