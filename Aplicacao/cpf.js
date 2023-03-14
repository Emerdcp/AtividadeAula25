const handleCpf = (event) => {
    let input = event
    input.value = cpfMask(input.value)
  }
  
  const cpfMask = (value) => {
    if (!value) return ""
      value = value.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4")
      return value  
  }