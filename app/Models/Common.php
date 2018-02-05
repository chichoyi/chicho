<?php

namespace App\Models;


trait Common
{

    public static function add(array $values){
        if ($result = static::create($values)){
            return $result;
        } else {
            return false;
        }
    }


    /**
     * @description 根据条件获取
     * @author chicho
     * @param array $where
     * @param array $column
     * @param string $status
     * @return mixed
     */
    public static function getByFeild(array $where = [], $column = ['*'], $status = 'normal_status', $where_function = 'where'){
        $self = static::setModel(static::getModel());
        $self = self::handleWhere($self, $where);
        $self = self::handlStatus($self, $status);
        return $self->get($column);
    }

    /**
     * @description 获取分页的列表
     * @author chicho
     * @param $perPage
     * @param $page
     * @param array $where
     * @param array $column
     * @param string $status
     * @param string $where_function
     * @return mixed
     */
    public static function getList($perPage, $page, array $where = [], $column = ['*'], $status = 'normal_status', $where_function = 'where'){
        $self = static::setModel(static::getModel());
        $self = self::handleWhere($self, $where);
        $self = self::handlStatus($self, $status);
        return $self->paginate($perPage, $column, 'page', $page);
    }

    /**
     * @description 统一处理where
     * @author chicho
     * @param $self
     * @param array $where
     * @return mixed
     */
    protected static function handleWhere($self, array $where){
        if (!empty($where)){
            foreach ($where as $k => $v)
                $self->where($k, $v);
        }
        return $self;
    }

    /**
     * @description 统一处理status
     * @author chicho
     * @param $self
     * @param $status
     * @return mixed
     */
    protected static function handlStatus($self, $status){
        if ($status)
            return $self->whereIn('status', [1, 2]);
        return $self;
    }

}
