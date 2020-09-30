<!-- Php page for the contact us form -->

<main class="contacts">
  <h6>GOT A QUESTION?</h6>
  <h1>Contact Diced</h1>
  <p>We're here to help and answer any question you might have.
  We look forward to hearing from you </p>

  <!-- contact us form which sends the information to submit.php page on clicking submit button -->
  <form class="contactform" method="POST" action="submit.php">
    <div class="form-group">
      <label for="InputName">Name</label>
      <input type="text" class="form-control" name="InputName" placeholder="Name" required>
    </div>
    <div class="form-group">
      <label for="InputEmail">Email address</label>
      <input type="email" class="form-control" name="InputEmail"  placeholder="Enter email" required>
      <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
    </div>
    
    <div class="form-group">
      <label for="question">Type your question/message</label>
      <br>
      <textarea id="question" name="question" placeholder="Write something.." required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</main>