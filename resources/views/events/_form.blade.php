<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label sr-only">Titre</label>
    <input class="form-control" type="text" id="title" class="form-control" name="title" value="{{ old('title') ? old('title') : $event->title }}" placeholder="titre de l'evenement">
    {!! $errors->first('title', '<span class="help-block"> :message </span>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label sr-only">Description</label>
    <textarea name="description" class="form-control" id="description" cols="30" rows="10"  placeholder="description de l'evenement">{{ old('description') ? old('description') : $event->description }}</textarea>
    {!! $errors->first('description', '<span class="help-block"> :message </span>') !!}
</div>
<div class="form-group">
    <input type="submit" value="{{ $submitButtonText }}" class="btn btn-primary">
</div>
