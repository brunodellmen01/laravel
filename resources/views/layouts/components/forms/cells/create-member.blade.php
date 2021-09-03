<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div
                class="form-group {{ $errors->has('meeting.member') ? ' has-error' : null }}">
                {{ Form::label('label', trans('member.member')) }}: <br>
                {!! Form::select('member[people_id][]', $people_id,
                old('member[people_id][]'),['class' =>
                'select-multiple form-control', 'multiple' =>
                'multiple'] ) !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group float-right">
                @include('layouts.admin.components.buttons.save')
            </div>
        </div>
    </div>
</div>
