import "./App.css";
import React from "react";
import { Routes, Route, Link } from "react-router-dom";
import * as Page from './pages/index';

function App() {
  return (
    <div className="App mx-3">
      <Link className="{mx-3}" to="">{" "}Home Page</Link>
      <Link className="{mx-3}" to="my-profile">My Profile</Link>
      <Link className="{mx-3}" to="new-user">New User</Link>
      <Link className="{mx-3}" to="new-company">New Company</Link>
      <Link className="{mx-3}" to="add-job">Add job</Link>
      <Link className="{mx-3}" to="assign-job">Assign Job</Link>
      <Link className="{mx-3}" to="all-job">All job</Link>
      <Link className="{mx-3}" to="my-job">My Job</Link>
      <Routes>
       
        <Route path="/" element={<Page.HomePage />} />
        <Route path="/my-profile" element={<Page.MyProfile />} />
      </Routes>
    </div>
  );
}

export default App;
