<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function getAllusers() {
        $users = DB::select('SELECT * FROM users ORDER BY create_at DESC');
        return $users;
    }

    public function addUser($data) {
        DB::insert('INSERT INTO users (fullname, email, create_at) values (?, ?, ?)', $data);
    }

    public function getDetail($id) {
        return DB::select('SELECT * FROM '.$this->table.' WHERE id = ?', [$id]);
    }

    public function updateUser($data, $id) {

        $data[] = $id;

        return DB::update('UPDATE '.$this->table.' SET fullname = ?, email = ?, update_at = ? WHERE id = ?', $data);
    }

    public function deleteUser($id) {
        return DB::delete('DELETE FROM '.$this->table.' WHERE id =?', [$id]);
    }

    // public function statementUser($sql) {
    //     return DB::statement($sql);
    // }
}
