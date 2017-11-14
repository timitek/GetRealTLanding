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
    <div class="step-item is-active">
        <div class="step-marker">3</div>
        <div class="step-details">
            <p class="step-title">Theme</p>
        </div>
    </div>
    <div class="step-item">
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
Choose a feel:
</h1>
<p class="subtitle">
Never mind the background pictures, you can personalize it the next step.
</p>

<div class="columns is-multiline">
  <div class="column is-one-quarter" v-for="theme in themes">
    <img :src="'/theme_preview/' + theme + '.png'" 
         v-on:click="selectTheme(theme)"
         class="img-theme-preview">    
  </div>
</div>

<div class="field is-grouped is-pulled-right">
    <div class="control">
        <a class="button is-warning is-outlined is-medium" v-on:click="showPage('products')">
        Back
        </a>
    </div>
    <div class="control">
        <a class="button is-primary is-outlined is-medium" v-on:click="showPage('file')">
        Save and Continue
        </a>
    </div>
</div>