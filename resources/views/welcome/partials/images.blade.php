<h1 class="title">Upload Images</h1>
<p class="subtitle">
    Upload any images you would like to be used on your site.
</p>


<div class="field">
  <label class="label">Image Type</label>
  <div class="control">
    <div class="select is-primary">
      <select v-model="imageType">
      <option>Profile</option>
      <option>Banner</option>
      <option>Huh?</option>
      <option>Duh!</option>
      </select>
    </div>
  </div>
</div>

<div class="file has-name">
  <label class="file-label">
    <input class="file-input" type="file" id="imageToUpload" v-on:change="uploadImage">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fa fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
    <span class="file-name" v-text="lastImageName" v-if="lastImageName"></span>
  </label>
</div>

<div class="columns is-multiline">
    <div class="column is-one-quarter" v-for="image in images" v-if="image.id">
        <button class="delete is-pulled-right" v-on:click="deleteImage(image)"></button>
        <img :src="'/images/' +  image.filename" 
            class="img-theme-preview">
    </div>
</div>

<div class="notification is-danger" v-if="errorMessage">
    <strong v-text="errorMessage"></strong>
    <ul v-if="errorDetails">
        <li v-for="error in errorDetails" v-text="error"></li>
    </ul>
</div>
 <p> <br /> </p>
<div class="field is-grouped">
  <div class="control">
    <button class="button is-primary is-medium is-outlined" v-on:click="showPage('confirmation')" :disabled="submitting">Done</button>
  </div>
</div>