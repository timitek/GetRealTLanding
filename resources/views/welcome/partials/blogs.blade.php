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
