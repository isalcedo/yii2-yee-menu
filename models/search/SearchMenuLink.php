<?php

namespace yeesoft\menu\models\search;

use yeesoft\models\MenuLink;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SearchMenuLink represents the model behind the search form about `yeesoft\menu\models\MenuLink`.
 */
class SearchMenuLink extends MenuLink
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order', 'alwaysVisible', 'created_by', 'updated_by'], 'integer'],
            [['id', 'menu_id', 'parent_id', 'link', 'label', 'image', 'created_at', 'updated_at'], 'safe'],
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
        $query = MenuLink::find()->joinWith('translations');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => Yii::$app->request->cookies->getValue('_grid_page_size', 20),
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ],
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'order' => $this->order,
            'alwaysVisible' => $this->alwaysVisible,
            'menu_id' => $this->menu_id,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'label', $this->label])
            ->andFilterWhere(['like', 'parent_id', $this->parent_id])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}