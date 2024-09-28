<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_ADMIN = 'Admin';
    const ROLE_USER = 'User';
    const ROLE_STAFF = 'Staff';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    

    public function order(){
        return $this->hasMany(Order::class);
    }


    public function getAll()
    {
        $users = DB::table('users')->get();;

        return $users;
    }


    // public function createUser($data)
    // {
    //     DB::table('users')->insert(
    //         [
    //             'categories_name' => $data['categories_name'],
    //             'categories_description' => $data['categories_description'],
    //             'image_path' =>$data['image_path'],
    //             'categories_status' =>$data['categories_status'],
    //         ]
    //     );


    // }

    public function updateUser($data, $id)
    {
       DB::table('users')
        ->where('id', $id)
        ->update($data);
    }


}
