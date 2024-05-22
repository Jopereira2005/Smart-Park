import { useState } from 'react'
import ParkLotSession from './components/ParkLotSession/ParkLotSession'
import ParkLotCard from './components/ParkLotCard/ParkLotCard'
import logo from '/logo.svg'
import favicon from '/favicon.svg'
import menu from '/menu.svg'
import banner from '/banner.png'

import './App.scss'

function App() {
  const commerce = {
    name: "Facens", 
    description: "Faculdade em São Paulo", 
    address: "Rodovia Senador José Ermírio de Moraes, 1425 - Jardim Constantino Matucci, Sorocaba - SP, 18085-784", 
    phone: "(15) 3238-1188" 
  }

  return (
    <>
      <header className="header">
        <div className="header__logo">
          <img src={ logo } alt="logo" className="header__logo__img" />
          <h1 className="header__logo__title">Smart<span className='bold'>Park</span></h1>
        </div>
        <div className="header__menu">
          <img src={ menu } alt="menu" className="header__menu__icon" />
        </div>
      </header>

      <section className="section">
        <div className="section__commerce">
          <div className="section__commerce__banner"></div>
          <div className="section__commerce__info">
            <div className="section__commerce__info__container">
              <div className="section__commerce__info__container__favicon">
                <img src={ favicon } alt="favicon" />
              </div>  
              <h1 className="section__commerce__info__container__title">{ commerce.name } </h1>
              <h2 className="section__commerce__info__container__description">{ commerce.description }</h2>
              <h3 className="section__commerce__info__container__subtitle">Endereço</h3>
              <p className="section__commerce__info__container__paragraph">{ commerce.address }</p>
              <h3 className="section__commerce__info__container__subtitle">Telefone</h3>
              <p className="section__commerce__info__container__paragraph">{ commerce.phone }</p>
            </div>
          </div>
        </div>

        <ParkLotSession className="section__parkLots" />
      </section>

      <footer></footer>
    </>
  )
}

export default App
