<h1 class="title">
Upload Pictures:
</h1>

<div class="file has-name">
  <label class="file-label">
    <input class="file-input" type="file" name="resume">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fa fa-upload"></i>
      </span>
      <span class="file-label" v-on:click="selectFile(file)">
        Choose a picture to upload
      </span>
    </span>
    <span class="file-name">
      File chosen
    </span>
  </label>
</div>

<div class="notification is-danger" v-if="errorMessage">
    <strong v-text="errorMessage"></strong>
    <ul v-if="errorDetails">
        <li v-for="error in errorDetails" v-text="error"></li>
    </ul>
</div>

<div class="field is-grouped is-pulled-right">
  <div class="control">
      <a class="button is-warning is-outlined is-medium" v-on:click="showPage('theme')">Back</a>
      <a class="button is-primary is-outlined is-medium" v-on:click="submit()" :disabled="submitting">Submit</a>
  </div>
</div>