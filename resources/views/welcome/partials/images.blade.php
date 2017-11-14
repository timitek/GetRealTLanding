<div class="steps">
    <div class="step-item is-completed is-success">
        <div class="step-marker">
            <span class="icon">
                <i class="fa fa-check"></i>
            </span>
        </div>
        <div class="step-details">
            <p class="step-title">Contact</p>
        </div>
    </div>
    <div class="step-item is-completed is-success">
        <div class="step-marker">
            <span class="icon">
                <i class="fa fa-check"></i>
            </span>
        </div>
        <div class="step-details">
            <p class="step-title">Products</p>
        </div>
    </div>
    <div class="step-item is-completed is-success">
        <div class="step-marker">
            <span class="icon">
                <i class="fa fa-check"></i>
            </span>
        </div>
        <div class="step-details">
            <p class="step-title">Theme</p>
        </div>
    </div>
    <div class="step-item is-completed is-success">
        <div class="step-marker">
            <span class="icon">
                <i class="fa fa-check"></i>
            </span>
        </div>
        <div class="step-details">
            <p class="step-title">Confirm</p>
        </div>
    </div>
    <div class="step-item is-active">
        <div class="step-marker">5</div>
        <div class="step-details">
            <p class="step-title">Images Upload</p>
        </div>
    </div>
    <div class="step-item">
        <div class="step-marker">6</div>
        <div class="step-details">
            <p class="step-title">Content</p>
        </div>
    </div>  
    <div class="step-item">
        <div class="step-marker">
            <span class="icon">
                <i class="fa fa-flag"></i>
            </span>
        </div>
        <div class="step-details">
            <p class="step-title">Done</p>
        </div>
    </div>
</div>

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
<div class="field is-grouped is-pulled-right">
<div class="control">
    <a class="button is-warning is-outlined is-medium" v-on:click="showPage('file')">Back</a>
    <a class="button is-primary is-medium is-outlined" v-on:click="showPage('blogs')">Next</a>
</div>
</div>