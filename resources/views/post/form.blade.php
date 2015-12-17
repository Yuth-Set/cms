<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title</label>
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="slug">Slug</label>
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
            {!! $errors->first('slug', '<span class="text-danger">:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="status">Status</label>
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
            {!! $errors->first('status', '<span class="text-danger">:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="content">Content</label>
            {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'txtContent']) !!}
            {!! $errors->first('content', '<span class="text-danger">:message</span>') !!}
        </div>
    </div>
</div>

