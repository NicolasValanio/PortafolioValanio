import React from 'react'

const Guitar = ({guitar,cart,addToCart}) => {


  return (
      <div className="col-md-6 col-lg-4 my-4 row align-items-center">
        <div className="col-4">
          <img className="img-fluid" src={guitar.imagen} alt="imagen guitarra" />
        </div>
        <div className="col-8">
          <h3 className="text-black fs-4 fw-bold text-uppercase">{guitar.nombre}</h3>
          <p>{guitar.descripcion}</p>
          <p className="fw-black text-primary fs-3">${guitar.precio}</p>
          <button
            type="button"
            className="btn btn-dark w-100"
            onClick={()=> addToCart(guitar)}
          >Agregar al Carrito</button>
        </div>
      </div>

  )
}

export default Guitar