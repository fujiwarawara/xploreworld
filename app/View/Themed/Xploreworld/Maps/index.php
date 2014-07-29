<?php
echo $this->Html->css('maps.css');
?>

<div id="user-map" class="xplorearea collapse in">
  <div id="map-canvas"></div>
  <div id="selected-list-box">
    <div class="ticket-body row">
      <div class="col-md-3">
        <?php echo $this->Html->image('/css/img/barcode.gif', array('class' => 'barcode')); ?>
      </div>
      <div class="col-md-9">
        <ul id="selected-list"></ul>
        <div class="clearfix"></div>
        <button id="mapdone" class="btn btn-success">Next</button>
      </div>
    </div>
  </div>
</div>

<div id="user-form" class="xplorearea collapse">
  <div class="form-group">
    <label for="seat-economy">Economy</label>
    <input id="seat-economy" class="form-control seats" name="seat" type="radio" value="Economy Class" checked />
    <label for="seat-business">Business</label>
    <input id="seat-business" class="form-control seats" name="seat" type="radio" value="Business Class" />
    <label for="seat-first">First</label>
    <input id="seat-first" class="form-control seats" name="seat" type="radio" value="First Class" />
  </div>
  <div class="form-group">
    <input id="first_name" class="form-control" type="text" placeholder="First Name" />
  </div>
  <div class="form-group">
    <input id="last_name" class="form-control" type="text" placeholder="Last Name" />
  </div>
  <div class="form-group">
    <input id="email" class="form-control" type="text" placeholder="Email" />
  </div>
  <div class="form-group">
    <input id="phone" class="form-control" type="text" placeholder="Phone" />
  </div>
  <div class="form-group">
    <textarea id="comment" class="form-control" placeholder="Comment"></textarea>
  </div>
  <div class="form-group">
    <input class="hidden-dummy" type="hidden" placeholder="Phone" />
  </div>
  <button id="formdone" class="btn btn-primary" type="hidden" placeholder="Phone">Send</button>
  <button id="formback" class="btn btn-default" type="hidden" placeholder="Phone">Back</button>
</div>

<!-- Thank you modal -->
<div id="success-modal" class="modal fade forms-general" tabindex="1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h4>Thank you</h4>
      </div>

      <div class="modal-body">
      </div>

    </div>
  </div>
</div>

<?php
echo $this->Html->scriptBlock(
  'var markerObj = ' . $this->Js->object($maps_object)
);
echo $this->Html->scriptBlock(
  'var addUrl = ' . $this->Js->object($add_url)
);
echo $this->Html->scriptBlock(
  'var homeUrl = ' . $this->Js->object($home_url)
);
echo $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAJmHl3cUQ1tttdfZig6Lv0X14S3ekddYk&v=3.exp&sensor=true&libraries=places');
echo $this->Html->script('maptheme-paledown.js');
echo $this->Html->script('maps.js');
?>