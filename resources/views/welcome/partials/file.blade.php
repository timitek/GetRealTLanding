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
    <span class="file-name" v-model="selected.file">
    </span>
  </label>
</div>

<div class="control is-pulled-right">
        <a class="button is-primary is-outlined is-medium">
        Submit
        </a>
</div>