<div class="steps">
  <div class="step-item is-active">
      <div class="step-marker">1</div>
      <div class="step-details">
        <p class="step-title">Contact</p>
      </div>
  </div>
<div class="step-item">
    <div class="step-marker">2</div>
    <div class="step-details">
        <p class="step-title">Products</p>
    </div>
</div>
<div class="step-item">
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
Hello World
</h1>
<p class="subtitle">
Get started with <strong>GetRealT</strong>!
</p>

<div class="field">
  <label class="label">Name</label>
  <div class="columns is-mobile">
      <div class="column"><input class="input is-primary" type="first_name" required placeholder="First Name" v-model="selected.firstName"></div>
      <div class="column"><input class="input is-primary" type="last_name" required placeholder="Last Name" v-model="selected.lastName"></div>
  </div>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left">
    <input class="input is-primary" type="email" required placeholder="example@admin.com" v-model="selected.email">
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">Phone</label>
  <div class="control has-icons-left">
    <input class="input is-primary" type="number" required placeholder="###-###-####" v-model="selected.phone">
    <span class="icon is-small is-left">
      <i class="fa fa-phone"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">Address</label>
  <div class="control has-icons-left">
    <input class="input is-primary" type="text" required placeholder="Street Address" v-model="selected.address">
    <span class="icon is-small is-left">
      <i class="fa fa-address-book-o"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">City</label>
  <div class="control">
    <input class="input is-primary" type="text" required placeholder="City Name" v-model="selected.city">
  </div>
</div>

<div class="field">
  <label class="label">State</label>
  <div class="control is-expanded">
    <div class="select is-primary is-fullwidth" required>
      <select v-model="selected.state">
        <option>Arkansas</option>
        <option>Texas</option>
        <option>Missouri</option>
        <option>Georgia</option>
      </select>
    </div>
  </div>
</div>

<div>
  <label class="label">Zip</label>
  <input class="input is-primary" type="number" required placeholder="Zip code" v-model="selected.zip">
</div>
<br />

<div class="field is-grouped is-pulled-right">
  <p class="control">
    <a class="button is-primary is-outlined is-medium" v-on:click="showPage('products')">
      Proceed
    </a>
  </p>
</div>