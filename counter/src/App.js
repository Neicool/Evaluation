import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component { 
  state = {
    compteur:0
  }
 
  
  decrementer = () => {
    this.setState ({
      compteur : this.state.compteur -1,
    });
  }

  incremeter = () => {
    this.setState({
      compteur : this.state.compteur+1,
        });
  }

  render() {
    return (
      <div className="App">
       <p>{this.state.compteur}</p>
       <input type="button" value="-" onClick={this.decrementer}/>
       <input type="button" value="+" onClick={this.incremeter}/>  
      </div>
    );
  }
}

export default App;
