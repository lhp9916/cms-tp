<?php
namespace Common\Model;

use Think\Model;

class PositionContentModel extends Model
{
    private $_db = '';

    public function __construct()
    {
        $this->_db = M('position_content');
    }

    public function insert($data)
    {
        return $this->_db->add($data);
    }

    public function select($condition = array())
    {
        return $this->_db->where($condition)->select();
    }
}