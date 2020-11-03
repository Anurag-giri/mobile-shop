@extends('header-navbar')
<form method="post" action="{{url('addOrUpdateUsers')}}" enctype="multipart/form-data">
        @csrf
        <table id="customers">
            <tr>
                <td> Name </td>
                <td> 
                    <input type="textbox" name="user_name" id="user_name" placeholder="Enter user name"
                        value="{{ isset($data->user_name) ? $data->user_name : '' }}"
                    /> 
                </td>
            </tr> 

            <tr>
                <td> Email </td>
                <td> 
                    <input type="textbox" name="user_email" id="user_email" placeholder="Enter user email"
                    value="{{ isset($data->user_email) ? $data->user_email : '' }}"
                    /> 
                </td>
            </tr>

            <tr>
                <td> City </td>
                <td> 
                    <input type="textbox" name="user_city" id="user_city"  placeholder="Enter user current city"
                        value="{{ isset($data->user_city) ? $data->user_city : '' }}"
                    /> 
                </td>
            </tr>

            <tr>
                <td> 
                    <input type="Submit"/> 
                    <input type="hidden" name="user_id" id="user_id" value="{{ isset($data->id) ? $data->id : '' }}" />
                </td>
            </tr>

        </table>
    </form>
@extends('footer')

<style>
    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    widtd: 100%;
    }

    #customers td, #customers td {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #customers tr:ntd-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers td {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
    }
</style>