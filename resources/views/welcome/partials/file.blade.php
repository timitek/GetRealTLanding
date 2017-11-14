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
    <div class="step-item is-active">
        <div class="step-marker">4</div>
        <div class="step-details">
            <p class="step-title">Confirm</p>
        </div>
    </div>
    <div class="step-item">
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