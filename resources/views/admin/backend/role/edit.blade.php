@extends('/admin/backend/layout/layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Role
        <small> | Update Role</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/admin/role') !!}"><i class="fa fa-user"></i> Role</a></li>
        <li class="active">Update Role</li>
    </ol>
</section>
<br>
<br>
<div class="container">
    {!! Form::open( array( 'route' => array('admin.role.update', $role->id), 'method' => 'PATCH')) !!}
    <!-- Role Name -->
    <div class="control-group {!! $errors->has('name') ? 'has-error' : '' !!}">
        <label class="control-label" for="name">Name</label>

        <div class="controls">
            {!! Form::text('name', $role->name, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Role Name', 'value'=>Input::old('name'))) !!}
            @if ($errors->first('name'))
            <span class="help-block">{!! $errors->first('name') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <hr>
    <div class="checkbox">
        <input type="hidden" value="0" name="permissions[admin.dashboard]">
        <label>
            <input type="checkbox" value="1" @if(isset($role->permissions['admin.dashboard']) and $role->permissions['admin.dashboard'])checked="checked"@endif name="permissions[admin.dashboard]"> Dashboard
        </label>
    </div>
    <hr>
    <div class="checkbox">
        <input type="hidden" value="0" name="permissions[admin.settings.index]">
        <input type="hidden" value="0" name="permissions[admin.settings.save]">
        <label>
            <input type="checkbox" value="1" @if(isset($role->permissions['admin.settings']) and $role->permissions['admin.settings'])checked="checked"@endif name="permissions[admin.settings]"> Settings Index
            <input type="checkbox" value="1" @if(isset($role->permissions['admin.settings.save']) and $role->permissions['admin.settings.save'])checked="checked"@endif name="permissions[admin.settings.save]"> Settings Save
        </label>
    </div>
    <hr>
     <div class="checkbox">
            <input type="hidden" value="0" name="permissions[admin.log]">
            <label>
                <input type="checkbox" value="1" @if(isset($role->permissions['admin.log']) and $role->permissions['admin.log'])checked="checked"@endif name="permissions[admin.log]"> Log
            </label>
        </div>
        <hr>
        <div class="checkbox">
           <input type="hidden" value="0" name="permissions[admin.form-post.index]">
            <label>
                <input type="checkbox" value="1" @if(isset($role->permissions['admin.form-post.index']) and $role->permissions['admin.form-post.index'])checked="checked"@endif name="permissions[admin.form-post.index]"> Form Post
            </label>
        </div>
        <hr>
    <div class="table-responsive">
        <table class="table table-condensed table-permissions table-checkboxes">
            <thead>
            <tr>
                <th>Modules</th>
                <th>Index</th>
                <th>Show</th>
                <th>View</th>
                <th>Create</th>
                <th>Store</th>
                <th>Edit</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach (Config::get('fully.modules') as $module=>$value)
            <tr>
                <td>{!! ucwords(str_replace('_', ' ', $module)) !!}
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.index]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.show]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.view]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.create]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.store]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.edit]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.update]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.destroy]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.index']) and $role->permissions['admin.'.$module.'.index'])checked="checked"@endif name="permissions[admin.{!! $module !!}.index]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.show']) and $role->permissions['admin.'.$module.'.show'])checked="checked"@endif name="permissions[admin.{!! $module !!}.show]">
                                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.view']) and $role->permissions['admin.'.$module.'.view'])checked="checked"@endif name="permissions[admin.{!! $module !!}.view]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.create']) and $role->permissions['admin.'.$module.'.create'])checked="checked"@endif name="permissions[admin.{!! $module !!}.create]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.store']) and $role->permissions['admin.'.$module.'.store'])checked="checked"@endif name="permissions[admin.{!! $module !!}.store]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.edit']) and $role->permissions['admin.'.$module.'.edit'])checked="checked"@endif name="permissions[admin.{!! $module !!}.edit]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.update']) and $role->permissions['admin.'.$module.'.update'])checked="checked"@endif name="permissions[admin.{!! $module !!}.update]">
                                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.destroy']) and $role->permissions['admin.'.$module.'.destroy'])checked="checked"@endif name="permissions[admin.{!! $module !!}.destroy]">
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Form actions -->
    {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
    <a href="{!! langUrl('/admin/role') !!}"
       class="btn btn-default">
        &nbsp;Cancel
    </a>
    {!! Form::close() !!}
</div>

@stop