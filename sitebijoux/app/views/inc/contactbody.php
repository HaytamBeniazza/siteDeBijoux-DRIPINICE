<style>
  .contact-form {
  max-width: 500px;
  margin: 0 auto;
  padding: 1rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 40px;
  background-color: #eeeee4;
}
</style>


<form class="contact-form">
  <p>CONTACT FORM</p>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" rows="3" placeholder="Type your message"></textarea>
  </div>
  <button type="submit" class="btn" style="background-color: orange">Submit</button>
</form>