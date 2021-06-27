import React, { useEffect, useRef, useCallback } from 'react';
import ReactDOM from 'react-dom';
import EntryFields from './Components/EntryFields';

class App extends React.Component{

    constructor() {
        super();
        this.externalNode = React.createRef();
    }

    updateEntryFields(event){
        console.log(event.target);
        console.log(this.externalNode);
    }
    componentWillMount(){
        document.addEventListener('click', this.updateEntryFields, false)

    }
    componentWillUnmount(){
        document.removeEventListener('click', this.updateEntryFields, false)
    }
    render(){
        return (
            <div ref={this.externalNode}>
                <EntryFields  />
            </div>
        )
    }
}


ReactDOM.render(
    <React.StrictMode>
    <App />
    </React.StrictMode>
    , document.getElementById('rct-edit-entry-app'));


// let header = document.getElementById('header');
// let navIcon = document.getElementById('mobile-nav-button');

// navIcon.addEventListener("click", showNavMenu);
// showNavClass = 'show-nav';

// function showNavMenu(){
// //   alert("I'm working");

//   if(!header.classList.contains(showNavClass)){
//       header.classList.add(showNavClass);
//       navIcon.innerHTML = 'X';
//       navIcon.style.fontSize = '25px';
//     }
//     else {

//     header.classList.remove(showNavClass);
//     navIcon.innerHTML = '| | |';
//     navIcon.style.fontSize = 'initial';
//   }
// }



