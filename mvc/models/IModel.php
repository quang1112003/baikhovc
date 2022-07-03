<?php

interface IModel
{
    function all();
    function save();
    function update(array $data,$id);
    function delete();
    function find($id);
}