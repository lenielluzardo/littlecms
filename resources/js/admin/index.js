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
