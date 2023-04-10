<!-- Include Bootstrap CSS and JS files -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Include Bootstrap Datepicker CSS and JS files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Add custom CSS for date pickers -->
<style>
    .datepicker-dropdown {
        top: 30px !important;
        left: 0 !important;
    }
    .datepicker table {
        width: 100%;
        font-size: 14px;
    }
    .datepicker table thead th {
        font-weight: bold;
        text-align: center;
    }
    .datepicker table tbody td {
        text-align: center;
    }
    .datepicker table tbody td.day {
        width: 14.28%;
    }
    .datepicker table tbody td.old,
    .datepicker table tbody td.new {
        color: #ccc;
    }
    .datepicker table tbody td.selected,
    .datepicker table tbody td.active:hover {
        background-color: #007bff;
        color: #fff;
    }
    .datepicker-inline {
        width: 100%;
    }
</style>

<!-- Create the booking form -->
<form action="{{ route('welcome') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="checkin">Check-in:</label>
        <div class="input-group date" id="checkin" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" name="checkin" data-target="#checkin" required>
            <div class="input-group-append" data-target="#checkin" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="checkout">Check-out:</label>
        <div class="input-group date" id="checkout" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" name="checkout" data-target="#checkout" required>
            <div class="input-group-append" data-target="#checkout" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Book Now</button>
</form><!-- Initialize date pickers -->
<script>
    $(function() {
        $('.date').datepicker({
            autoclose: true,
            startDate: '+1d' // Check-in date must be at least one day from today
        }).on('changeDate', function(e) {
            // When the check-in date is changed, set the minimum check-out date to the next day
            if ($(this).attr('id') == 'checkin') {
                var minCheckoutDate = new Date(e.date.valueOf());
                minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);
                $('#checkout').datepicker('setStartDate', minCheckoutDate);
            }
        });
    });
</script>
