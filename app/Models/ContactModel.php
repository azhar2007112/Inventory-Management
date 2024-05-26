<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    
    static public function getRecord()
    {
        return self::select('contacts.*','contacts.name as created_by_name')
       
        ->where('contacts.is_delete','=',0)
    
        ->orderBy('contacts.id','desc')
        ->get();
    }
    static public function getSingle($id){
        return self::find($id);
        }
    
        static public function getRecordActive()
    {
        return self::select('contacts.*')
        ->join('users','users.id','=','contacts.created_by')
        ->where('contacts.is_delete','=',0)
      
    
        ->orderBy('contacts.name','asc')
        ->get();
    }
    
    
}
