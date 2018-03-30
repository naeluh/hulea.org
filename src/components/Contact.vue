<template>
    <article class="background-content">
        <section class="offset0">
            <form id="contact_form" v-on:submit.prevent="submitForm" action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <!-- v-model link to the model (i.e. pieces of the data section of vue.js) -->
                    <!-- v-on lets us run methods from vue.js : this one is v-on:blur for the blur event -->
                    <!-- blur just means that the field no longer has 'focus' -->
                    <input v-model="name" v-on:blur="isValidName" class="form-control" name="name" type="name" required/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input v-model="email" v-on:blur="isValidEmail" class="form-control" name="email" type="email" required/>
                </div>
                <div class="form-group">
                    <label for="message">Message (<span>{{ message.length }}</span> / <span>{{ maxLength }}</span>)</label>
                    <textarea v-model="message" v-on:blur="isValidMessage" class="form-control" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </section>
    </article>
</template>

<script>
import store from '../store'
import axios from 'axios'

export default {
  name: 'Contact',
  props: ['arr'],
  data () {
    return {
      name: '',   // data for the name on the form
      email: '',   // data for the email on the form
      message: '', // data for the message on the form
      maxLength: 140 // maximum length of the form message
    }
  },
  methods: { // all the actions our app can do
    isValidName: function () { // TODO what if name is just spaces?
      var valid = this.name.length > 0
      console.log('checking for a valid name: ' + valid)
      return valid
    },
    isValidEmail: function () { // TODO is a@b a valid email?
      var valid = this.email.indexOf('@') > 0
      console.log('checking for a valid email: ' + valid)
      return valid
    },
    isValidMessage: function () { // what is message is just spaces?
      var valid = (this.message.length > 0) && (this.message.length < this.maxLength)
      console.log('checking for a valid message: ' + valid)
      return valid
    },
    checkMessage: function () {
      // TODO keep the message below maxMessageLength?
      // or maybe change the text, background, or counter color?
    },
    submitForm: function () {
      // TODO prevent form from submitting if name, email, or message
      // are invalid and display message
      // TODO submit to form processor
      console.log('submitting message...')
      axios({
        method: 'POST',
        url: 'https://hulea.org/contact-form.php',
        data: {
          name: this.name,
          email: this.email,
          message: this.message
        },
        config: {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        }
      })
      .then(function (response) {
        // handle success
        console.log(response)
      })
      .catch(function (response) {
        // handle error
        console.log(response)
      })
    }
  },
  beforeRouteLeave (to, from, next) {
    store.commit(
      store.state.nav = 'CLOSE_NAV'
    )
    next()
  },
  mounted () {

  }
}
</script>

<style lang="scss" scoped>
div {
  position:relative;
  .content-wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
  }
  overflow: hidden;
  #wrap {
    #block {

    }
  }
}

</style>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>