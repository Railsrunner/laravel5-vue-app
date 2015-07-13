<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';

    protected $fillable = ['first_name', 'last_name', 'email', 'phone_num_1', 'phone_num_2'];

    /**
     * Used to save people to the db.
     * @param array $arrayOfPeople
     * @return Array of ids
     */
    public static function savePeople(Array $arrayOfPeople) {
        $arrayOfPeopleIds = [];

        foreach($arrayOfPeople as $people) {
            $person = Person::create($people);

            array_push($arrayOfPeopleIds, $person->id);
        }

        return $arrayOfPeopleIds;
    }
}
