<h1 class="title">
Okay, great! Here is what it looks like:
</h1>
<p class="subtitle">
If you're happy confirm to continue.
</p>

<div class="card">
    <div class="card-image">
        <figure class="image">
            <img :src="'/theme_preview/' + selected.theme + '.png'">
        </figure>      
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