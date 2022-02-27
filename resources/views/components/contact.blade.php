  <div class="card">
 
    <div class="card-header text-center font-weight-bold">
      <h2>Laravel 8 Contact Form</h2>
    </div>
 
    <div class="card-body">
        <form class="row g-3" method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('save') }}">
          @csrf
          <div class="col-md-12 mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
            @error('name')
                <div class="alert alert-danger form-text">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-12 mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control">
            @error('email')
                <div class="alert alert-danger form-text">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-12 mb-3">
            <label class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control">
            @error('subject')
                <div class="alert alert-danger form-text">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-12 mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-md-4 mb-3">
            <label for="inputState" class="form-label">Hours</label>
            <select id="inputState" name="hour" class="form-control">
              <option selected>Select</option>
              <?php
                for ($x = 0; $x <= 12; $x++) {
                    ?>
                    <option value="<?php echo $x; ?>" ><?php echo $x; ?></option>
                    <?php
                } 
               ?>
            </select>
            @error('hour')
                <div class="alert alert-danger form-text">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-4 mb-3">
            <label for="inputState" class="form-label">Minute</label>
            <select id="inputState" name="minute" class="form-control">
              <option selected>Select</option>
              <?php
                for ($x = 0; $x <= 60; $x++) {
                    ?>
                    <option value="<?php echo $x; ?>" ><?php echo $x; ?></option>
                    <?php
                } 
               ?>
            </select>
            @error('minute')
                <div class="alert alert-danger form-text">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-4 mb-3">
            <label for="inputState" class="form-label">Format</label>
            <select id="inputState" name="format" class="form-control">
              <option selected>select</option>
              <option value="am">AM</option>
              <option value="pm">PM</option>
            </select>
            @error('format')
                <div class="alert alert-danger form-text">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-12 mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
            @error('message')
                <div class="alert alert-danger form-text">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-12 mb-3">
              <label class="form-label">Upload Image</label>
              <input type="file" name="image" class="form-control mb-4" placeholder="Choose image" id="image">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
  