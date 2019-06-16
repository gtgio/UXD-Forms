<!DOCTYPE HTML>
<html>
<title>UXD Forms</title>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta name="author" content="Giovanni Martelli">
<head>
<style>
body {
  background-color: grey;
}
h2 {
        margin-top: 0;
        border: 1px solid #CCC;
        border-radius: 10px;
        background-color: lightgrey;
        text-align: center;
        color: white;
        text-shadow: 2px 2px 2px #000000
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    form {
        margin: 0 auto;
        width: 470px;
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
        background-color: white;
        box-shadow: 0 0 30px ;
    }

    div+div {
        margin-top: 1em;
    }

    label span {
        display: inline-block;
        width: 120px;
        text-align: right;
    }

    input, textarea {
        font: 1em sans-serif;
        width: 250px;
        box-sizing: border-box;
        border: 1px solid #999;
    }

    input[type=checkbox], input[type=radio] {
        width: auto;
        border: none;
    }

    input:focus, textarea:focus {
        border-color: #000;
    }

    textarea {
        vertical-align: top;
        height: 5em;
        resize: vertical;
    }

    fieldset {
        width: 250px;
        box-sizing: border-box;
        margin-left: 136px;
        border: 1px solid #999;
    }

    button {
        margin: 20px 0 0 124px;
        cursor: pointer;
    }


        .field-wrapper{
            margin: 2px 0 2px 0;
            padding: 0;
        }

        .confirm-message{
            margin: 0;
            padding: 0;
            font-size: .8em;
        }

        #submit {
          width: 226px;
          margin: 2px;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: lightgrey;
          cursor: pointer;
        }

        #reset {
          width: 226px;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: lightgrey;
          cursor: pointer;
        }

        .title {
          margin-bottom: 10px;
          margin-top: -3px;
          padding: 10px;
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: lightgrey;
          text-align: center;
          color: white;
          text-shadow: 2px 2px 2px #000000
        }

        #personal {
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: #dedede;
          padding: 10px;
        }

        #contact {
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: #dedede;
          padding: 10px;
        }

        #interests {
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: #dedede;
          padding: 10px;
        }

        #inputs {
          margin: 0 auto;
          margin-top: 50px;
          width: 460px;
          padding: 1em;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: white;
          box-shadow: 0 0 30px ;
        }

        .inputans {
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: #dedede;
          padding: 10px;
        }

        #tips {
          width: 226px;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: lightgrey;
          font-size: 1.2em;
        }

        #thetips{
          margin: 0 auto;
          width: 500px;
          padding: 1em;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: white;
          box-shadow: 0 0 30px ;

        }

        li{
          font-style: initial;
    font-family: sans-serif;
    font-weight: bold;
        }

        p{

        }

</style>
</head>
<body>

  <div id="thetips">
    <h2>10 tips for a good and beautiful form</h2>
    <li>1. Align</li>
    <p>By aligning your form becomes more readable.</p>
    <li>2. Group by topic</li>
    <p>By grouping your form by topic, it becomes clearer and your form looks nicer.</p>
    <li>3. Short labels (descriptions)</li>
    <p>By placing labels (descriptions) on your form it becomes clearer what is asked of you.</p>
    <li>4. Input field: explain, specify options (radio button)</li>
    <p>By placing radio buttons, a choice is made easier.</p>
    <li>5. Input field: contrast with background, subtle edges</li>
    <p>By placing an Input field that contrasts with the background and has subtle edges, your form will look nicer and tidier.</p>
    <li>6. Give visual instructions</li>
    <p>By giving visual instructions it becomes clearer to the visitor what he or she must do.</p>
    <li>7. Required = *</li>
    <p>By placing a * in the mandatory text boxes, the user knows what he or she must enter.</p>
    <li>8. CTA: Primary vs Secondary and "say what it does"</li>
    <p>By using a good CTA, the user knows what he or she is filling in your form for.</p>
    <li>9. Validation: indicate with red, where is the error, and what I can do</li>
    <p>By showing a message with a red color where there is an error, it becomes clear to the user what he or she should improve or adjust.</p>
    <li>10. Use colors effectively, minimally and think of contrast and tranquility</li>
    <p>By using color effectively and minimally, clarity and tranquility are created, which makes the user feel better.</p>

  <button id="tips"><a href="form.php">Go back to the form</a></button>
</div>
</body>
</html>
