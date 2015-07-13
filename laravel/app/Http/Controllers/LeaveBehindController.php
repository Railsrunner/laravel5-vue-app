<?php

namespace App\Http\Controllers;

use App\Models\ClientDetails;
use App\Models\Person;
use Illuminate\Http\Request;

use App\Http\Requests;

class LeaveBehindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //get client detail info
        $clientDetails = ClientDetails::all();

        return view('leave_behind.view', ['clientDetails' => $clientDetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('leave_behind.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $clientDetails = new ClientDetails();

        //get client details from post request
        $clientDetails->name = $input['name'];
        $clientDetails->bio = $input['bio'];

        //get point of contacts
        $pointOfContacts = $input['point_of_contacts'];

        //save them to the database and return the ids to save them along with the leave behind
        if (!empty($pointOfContacts)) {
            $arrayOfPersonIds = Person::savePeople($pointOfContacts);
            $clientDetails->point_of_contact_ids = serialize($arrayOfPersonIds);
        }

        $clientDetails->save();

        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function destroy(Request $request)
    {
        $input = $request->all();

        $leaveBehind = ClientDetails::find($input['id']);
        $leaveBehind->delete();

        return 'deleted';
    }
}
