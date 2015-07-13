@extends('app')

@section('content')

<div class="main-container">
    <div class="main-content">
        <div class="main-title">Create New Leave Behind</div>
    </div>
</div>

<div class="row">
    <div class='col-md-6'>
        <div id="createLeaveBehind">
            <div class="form-group">
                <label for="clientNameInput">Client Name</label>
                <input type="text" class="form-control" v-model="name" placeholder="Client Name">
            </div>
            <div class="form-group">
                <label for="clientBioInput">Client Bio</label>
                <input type="text" class="form-control" v-model="bio" placeholder="Client Bio">
            </div>

            <br />
            <hr>
            <h3>Contacts</h3>

            <div v-repeat="point_of_contacts">
                <div class="form-group">
                    <label>Point Of Contact First Name</label>
                    <input type="text" class="form-control" v-model="point_of_contacts[$index].first_name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label>Point Of Contact Last Name</label>
                    <input type="text" class="form-control" v-model="point_of_contacts[$index].last_name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label>Point Of Contact Main Phone Number</label>
                    <input type="text" class="form-control" v-model="point_of_contacts[$index].phone_num_1" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label>Point Of Contact Alt Phone Number</label>
                    <input type="text" class="form-control" v-model="point_of_contacts[$index].phone_num_2" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label>Point Of Contact Email</label>
                    <input type="text" class="form-control" v-model="point_of_contacts[$index].email" placeholder="Last Name">
                </div>
            </div>


            <button v-on="click: addNewPocToArray()" class="btn btn-primary btn-sm">Add Another Contact</button>
            <button v-on="click: createNewLeaveBehind()" class="btn btn-primary btn-sm">Submit</button>
            <p v-if="created" class="created-text">Was Created. </p>
        </div>
    </div>
</div>

@stop