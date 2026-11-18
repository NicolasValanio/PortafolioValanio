import  {useState , useEffect} from 'react'
import {bd} from './data.js'
import Header from './components/Header'
import Guitar from './components/Guitar'
function App() {
const initialCart = () => {
  const localStorageCart = localStorage.getItem('cart')
  return localStorageCart ? JSON.parse(localStorageCart) : []
}

  //al ser local se usa state, si fuera api se usa effect
  const [data, setData] = useState(bd)
  const [cart, setCart] = useState(initialCart)
  const MAX_ITEMS =5
  const MIN_ITEMS =1

  // localStorage
  useEffect(()=>{
    
    localStorage.setItem('cart', JSON.stringify(cart))

  }, [cart])

  const addToCart=(item)=>{
    
    const itemsExist = cart.findIndex(guitar=> guitar.id === item.id)
    if(itemsExist >=0 ){ //existe en el carrito
      const updateCart =[...cart]
      updateCart[itemsExist].quantity++
      setCart(updateCart)
    }else{
      item.quantity=1
      setCart([...cart, item])
    }
  }

  const deleteCart =(id)=>{
    setCart(prevCart => prevCart.filter(guitar => guitar.id !== id))
  }

  const addBtn =(id)=>{
    const updateCart = cart.map(item=>{
      if(item.id===id && item.quantity < MAX_ITEMS){
      return{
        ...item,
        quantity: item.quantity + 1 
      }
      }
      return item
      })
      setCart(updateCart)
    }

  const removeBtn =(id)=>{
      const updateCart = cart.map(item=>{
        if(item.id===id && item.quantity>MIN_ITEMS){
        return{
          ...item,
          quantity: item.quantity - 1 
        }
        }
        return item
        })
        setCart(updateCart)
    } 
  
  const deleteAll =()=>{
    setCart([])
  }


  return (
    <>
      <Header 
      cart={cart}
      deleteCart={deleteCart}
      addBtn={addBtn}
      removeBtn={removeBtn}
      deleteAll={deleteAll}
      />
      <main className="container-xl mt-5">
        <h2 className="text-center">Nuestra Colección</h2>

        <div className="row mt-5">
          {data.map((guitar)=>{ 
            return(
              <Guitar 
              guitar={guitar}
              key={guitar.id}
              setCart={setCart}
              cart={cart}
              addToCart={addToCart}
              />
              
            ) 
          })}
        </div>
      </main>


      <footer className="bg-dark mt-5 py-5">
        <div className="container-xl">
          <p className="text-white text-center fs-4 mt-4 m-md-0">GuitarLA - Todos los derechos Reservados</p>
        </div>
      </footer>

    </>
  )
}

export default App
