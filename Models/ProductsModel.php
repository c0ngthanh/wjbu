<?php
    class ProductsModel extends BaseModel{
        const TABLE = 'products';
        public function getAll($select = ['*'],$orderBys =[],$limit =15){
           return $this->All(self::TABLE,$select,$orderBys,$limit);
        }
        
        public function findById($id){
            return $this->find(self::TABLE,$id);
        }

        public function delete($id){
            return __METHOD__;
        }
    }
?>