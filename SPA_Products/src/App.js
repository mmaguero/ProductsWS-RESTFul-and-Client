import React, { Component } from "react";
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.css'
import "./App.css";

import { Navbar, NavItem, Nav, Grid, Row, Col } from "react-bootstrap";

class StoreDisplay extends Component {
  constructor(props) {
    super(props);
    this.state = {
      /**/
    };
  }

  componentDidMount() {
    const zip = this.props.zip;
    axios.get('http://localhost/restful-services-in-codeigniter/index.php/api/productById/id/'+zip+'/')
    .then(res => {
        this.setState({re: res.data});
      })
    .catch((error) => {
      console.log(error);
    });
  }
  render() {
    if (!this.state.re) return <div>Loading</div>;
    return (
      <div name="detail">
      <h1>
      {this.state.re[0].name}
      </h1>
      <address>
      <p><b>Code:</b> {this.state.re[0].code}</p>
      <p><b>Categories:</b> {this.state.re[0].categories}</p>

      <img
      width="60%"
      height="40%"
      alt={this.state.re[0].name}
      src={this.state.re[0].imagen} />

      <p><b>Description:</b> {this.state.re[0].description}</p>
      </address>
      </div>
    );
  }
}

class App extends Component {
  constructor() {
    super();
    this.state = {
      activePlace: 0,
      re: [],
    };
  }
  componentDidMount() {

    axios.get('http://localhost/restful-services-in-codeigniter/index.php/api/products/',
  /*{ headers: { Authorization: AuthStr } }*/)
    .then(function(response) {
      var places = response.data.map(function(item) {
        return {
          key: item.id,
          label: item.name
        };
      });
      this.setState({re:places});
    }.bind(this)).catch((error) => {
      console.log(error);
    });
  }

  render() {
    const activePlace = this.state.activePlace;
    const resta = this.state.re;
if (!resta[activePlace]) return <div>Loading</div>;
    return (
      <div>
      <Navbar>
      <Navbar.Header>
      <Navbar.Brand>
      React Simple Store App
      </Navbar.Brand>
      <a href="https://github.com/mmaguero">*</a>
      </Navbar.Header>
      </Navbar>
      <Grid>
      <Row>
      <Col md={4} sm={4}>
      <h3>Select a product</h3>
      <Nav
      bsStyle="pills"
      stacked
      activeKey={activePlace}
      onSelect={index => {
        this.setState({ activePlace: index });
      }}
      >
{resta.map((place, index) => (
                  <NavItem key={index} eventKey={index}>{place.label}</NavItem>
                ))}
      </Nav>
      </Col>
      <Col md={8} sm={8}>
      <StoreDisplay key={activePlace} zip={resta[activePlace].key} />
      </Col>
      </Row>
      </Grid>
      </div>
    );
  }
}

export default App;
