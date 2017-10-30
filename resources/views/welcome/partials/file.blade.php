<h1 class="title">
Here is how your file looks like:
</h1>

<div class="card">
    <div class="columns">
        <div class="column is-half">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img :src="'/theme_preview/' + selected.theme + '.png'">
                </figure>
            </div>
        </div>
        <div class="column">
            <div class="card-content">
                <p class="title is-4">Name: <span v-text="selected.firstName + ' ' + selected.lastName"></span></p>
                <p class="title is-4">Email: <span v-text="selected.email"></span></p>
                <p class="title is-4">Phone: <span v-text="selected.phone"></span></p>
                <p class="title is-4">Address: <span v-text="selected.address"></span></p>
                <p class="title is-4">City: <span v-text="selected.city"></span></p>
                <p class="title is-4">State: <span v-text="selected.state"></span></p>
                <p class="title is-4">Zip: <span v-text="selected.zip"></span></p>
                <ul>
                    <li><p class="title is-4">Products:</p></li>
                    <li><p v-if="selected.domain" class="subtitle is-5">&emsp;Domain</p></li>
                    <li><p v-if="selected.hosting" class="subtitle is-5">&emsp;Hosting</p></li>
                    <li><p v-if="selected.agent" class="subtitle is-5">&emsp;GetRETS Agent Bundle</p></li>
                    <li><p v-if="!selected.agent" class="subtitle is-5">&emsp;GetRETS Broker Bundle</p></li>
                </ul>
            </div>
        </div>            
    </div>
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
      <a class="button is-primary is-outlined is-medium" v-on:click="submit()" :disabled="submitting">Confirm</a>
  </div>
</div>