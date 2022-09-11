var firebaseConfig = {
    apiKey: "AIzaSyAeZzaLC6rFyEvqyPDN3WJ3copvSLTv4tk",
    authDomain: "login-reg-a6544.firebaseapp.com",
    databaseURL: "https://login-reg-a6544.firebaseio.com",
    projectId: "login-reg-a6544",
    storageBucket: "login-reg-a6544.appspot.com",
    messagingSenderId: "281718443814",
    appId: "1:281718443814:web:b54a887409c68fb8137be7",
    measurementId: "G-XXVM0KE3TT"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();
firebase.analytics();


const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const email = signupForm['suemail'].value;
    const password = signupForm['supassword'].value;

    auth.createUserWithEmailAndPassword(email, password).then(cred => {
        console.log(cred.user);
        const model = document.querySelector('#signup-form');
        M.Model.getInstance(model).close();
        signupForm.reset();
    })

});