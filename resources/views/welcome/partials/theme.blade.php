<h1 class="title">
Choose a theme:
</h1>

<div class="columns is-mobile is-multiline">
  <div class="column is-one-quarter" v-for="theme in themes">
    <img :src="'https://bootswatch.com/' + theme + '/thumbnail.png'" 
         v-on:click="selectTheme(theme)"
         style="width:300px">    
  </div>
</div>

<div class="field is-grouped is-pulled-right">
    <div class="control">
        <a class="button is-warning is-outlined is-medium" v-on:click="showPage('contact')">
        Back
        </a>
    </div>
    <div class="control">
        <a class="button is-primary is-outlined is-medium" v-on:click="showPage('file')">
        Save and Continue
        </a>
    </div>
</div>