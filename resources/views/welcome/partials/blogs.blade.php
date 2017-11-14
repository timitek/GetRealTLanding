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
    <div class="step-item is-completed is-success">
        <div class="step-marker">
            <span class="icon">
                <i class="fa fa-check"></i>
            </span>
        </div>
        <div class="step-details">
            <p class="step-title">Images Upload</p>
        </div>
    </div>
    <div class="step-item is-active">
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
We'd like to add some content to your page-
</h1>

<div class="control">
    <label><strong>Welcome</strong></label>
    <textarea class="textarea is-primary" 
    placeholder="Tell us a little about yourself (Write a short bio, things you would like to share with the world on your homepage)">
    </textarea>
</div>

<div class="columns">
  <div class="column is-one-third">
    <label><strong>Feature I</strong></label>
        <textarea class="textarea is-primary" placeholder="Featured"></textarea>  
  </div>
  <div class="column is-one-third">
    <label><strong>Feature II</strong></label>
        <textarea class="textarea is-primary" placeholder="Featured"></textarea>  
  </div>
  <div class="column is-one-third">
    <label><strong>Feature III</strong></label>
        <textarea class="textarea is-primary" placeholder="Featured"></textarea>  
  </div>
</div>

<div class="field is-grouped is-pulled-right">
<div class="control">
    <a class="button is-warning is-outlined is-medium" v-on:click="showPage('images')">Back</a>
    <a class="button is-primary is-outlined is-medium" v-on:click="confirm()" :disabled="submitting">Done</a>
</div>
</div>
