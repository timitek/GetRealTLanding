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

<div class="columns">
    <div class="column is-half">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img :src="'https://bootswatch.com/' + selected.theme + '/thumbnail.png'">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img :src="'https://bootswatch.com/' + selected.theme + '/thumbnail.png'">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4"><span v-text="selected.firstName"></span></p>
                        <p class="subtitle is-6"><span v-text="selected.email"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="field is-grouped is-pulled-right">
  <div class="control">
      <a class="button is-warning is-outlined is-medium" v-on:click="showPage('theme')">Back</a>
      <a class="button is-primary is-outlined is-medium" v-on:click="submit()" :disabled="submitting">Submit</a>
  </div>
</div>