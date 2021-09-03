<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <input type="date" name="date_start" value="{{ date('Y-m-d') }}" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="date" name="date_and" value="{{ date('Y-m-d', strtotime('+1 months')) }}"
                class="form-control">
        </div>
    </div>
</div>
