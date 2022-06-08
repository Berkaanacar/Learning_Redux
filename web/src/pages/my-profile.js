import React from 'react';
import Input from '../components/input';

export default function MyProfile(props) {
  return (
    <div className={'container'}>
      <div className={'row justify-content-center'}>
        <div className={'col-lg-6 col-md-8 col-12'}>
          <Input text={'Adınız :'} type={"text"}/>
          <Input text={'Email :'} type={"email"}/>
          <Input text={'Password :'} type={"password"}/>
          <Input text={'Açıklama :'} type={"text"}/>

        </div>

      </div>

    </div>
  )
}
