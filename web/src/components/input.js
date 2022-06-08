import React from 'react';
export default function Input(props) {
    const {text,type} = props;
  return  <div className="row g-3 align-items-center mt-1">
  <div className="col-4">
      <label htmlFor="inputPassword6" className="col-form-label">{text}</label>
  </div>
  <div className="col-4">
      <input type={type} id="inputPassword6" className="form-control"
             aria-describedby="passwordHelpInline"/>
  </div>
  <div className="col-4">
      <span id="passwordHelpInline" className="form-text">
      
      </span>
  </div>
</div>
}
